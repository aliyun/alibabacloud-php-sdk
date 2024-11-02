<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class redirectConfig extends Model
{
    /**
     * @description The hostname to which requests are redirected.
     *
     * The hostname must meet the following requirements:
     *
     *   The hostname must be 3 to 128 characters in length, and can contain lowercase letters, digits, and the following special characters: - . \\* = ~ _ + \\ ^ ! $ & | ( ) [ ] ?.
     *   The hostname must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label can contain only letters, asterisks (*), and question marks (?), and cannot contain digits or hyphens (-). The leftmost `domain label` can contain asterisks (*).
     *   The domain labels cannot start or end with hyphens (-). You can specify asterisks (∗) and question marks (?) anywhere in a domain label.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The HTTP status code that indicates the redirect type. Valid values: **301**, **302**, **303**, **307**, and **308**.
     *
     * @example 301
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The path of the destination to which requests are forwarded. Valid values:
     *
     *   **${path}** (default): You can reference \\*\\*${host}**, **${protocol}** and **${port}\\*\\*. Each variable can be used only once. The preceding variables can be used at the same time or combined with a custom value.
     *
     *   A custom value. You must ensure that the custom value meets the following requirements:
     *
     *   The path must be 1 to 128 characters in length. You can use asterisks (\\*) and question marks (?) as wildcard characters.
     *   The path can contain letters, digits, and the following special characters: `$ - _ . + / & ~ @ : \\" * ?`. It must start with a forward slash (/) and cannot contain the following characters: `" % # ; ! ( ) [ ] ^ , "`.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The port to which requests are forwarded.
     *
     * Valid values: **1** to **63335**.
     * @example 10
     *
     * @var string
     */
    public $port;

    /**
     * @description The protocol of the destination to which requests are forwarded. Valid values:
     *
     * Valid values for HTTP listeners: **HTTP** and **HTTPS**.
     *
     * Valid values for HTTPS listeners: **HTTPS**.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The query string to which requests are redirected.
     *
     * The query string must be 1 to 128 characters in length, and can contain printable characters, excluding uppercase letters and the following special characters: `# [ ] { } \\ | < > &`.
     * @example quert
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'host'     => 'Host',
        'httpCode' => 'HttpCode',
        'path'     => 'Path',
        'port'     => 'Port',
        'protocol' => 'Protocol',
        'query'    => 'Query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redirectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
