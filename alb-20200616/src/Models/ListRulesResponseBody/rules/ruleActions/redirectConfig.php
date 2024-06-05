<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class redirectConfig extends Model
{
    /**
     * @description The hostname to which requests are redirected. Valid values:
     *
     *   **${host}** (default): If ${host} is returned, no other character is appended.
     *
     *   Limits on a custom value:
     *
     *   The hostname is 3 to 128 characters in length, and can contain lowercase letters, digits, hyphens (-), and periods (.). Asterisks (\\*) and question marks (?) can be used as wildcard characters.
     *   The hostname contains at least one period (.) but does not start or end with a period (.).
     *   The rightmost domain label contains only letters and wildcard characters. It does not contain digits or hyphens (-).
     *   The domain labels do not start or end with hyphens (-).
     *   You can use asterisks (\\*) and question marks (?) anywhere in a domain label as wildcard characters.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The redirect type. Valid values: **301**, **302**, **303**, **307**, and **308**.
     *
     * @example 301
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The path to which requests are redirected. Valid values:
     *
     *   **${path}** (default): You can reference \\*\\*${host}**, **${protocol}**, and**${port}**. The path can consist of **${host}**,**${protocol}**, and **${port}\\*\\*. Each variable can be used only once. The preceding variables can be used at the same time or combined with a custom value.
     *
     *   Limits on a custom value:
     *
     *   The value is 1 to 128 characters in length.
     *   It starts with a forward slash (/) and contains letters, digits, and the following special characters: `$ - _ .+ / & ~ @ :`. It does not contain the following special characters: `" % # ; ! ( ) [ ] ^ , "`. You can use asterisks (\\*) and question marks (?) as wildcard characters.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The port to which requests are redirected. Valid values:
     *
     *   **${port}** (default): If ${port} is returned, no other character is appended.
     *   Other valid values: **1 to 63335**.
     *
     * @example 10
     *
     * @var string
     */
    public $port;

    /**
     * @description The redirect protocol. Valid values:
     *
     *   **${protocol}** (default): If ${protocol} is returned, no other character is appended.
     *   **HTTP** or **HTTPS**.
     *
     * > HTTPS listeners support only HTTP to HTTPS redirection.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The query string to which requests are redirected. The query string must be 1 to 128 characters in length, and can contain printable characters, excluding uppercase letters and the following special characters: `# [ ] { } \\ | < > &`.
     *
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
