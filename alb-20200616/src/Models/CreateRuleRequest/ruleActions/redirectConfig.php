<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions;

use AlibabaCloud\Tea\Model;

class redirectConfig extends Model
{
    /**
     * @description The hostname to which requests are forwarded. Valid values:
     *
     *   **${host}** (default): If you set the value to ${host}, you cannot append other characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The hostname must be 3 to 128 characters in length, and can contain lowercase letters, digits, and the following characters: - . \\* = ~ _ + \\ ^ ! $ & | ( ) [ ] ?.
     *   The hostname must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label can contain only letters and wildcard characters, and cannot contain digits or hyphens (-). The leftmost `domain label` can be an asterisk (\\*).
     *   The domain labels cannot start or end with hyphens (-).
     *   You can use asterisks (\\*) and question marks (?) anywhere in a domain label as wildcard characters.
     *
     * @example ${host}
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
     * @description The URL to which requests are redirected. Valid values:
     *
     *   Default value: **${path}**. **${host}**, **${protocol}**, and **${port}** are also supported. Each variable can be specified only once. You can specify one or more of the preceding variables in each request. You can also combine them with a custom value.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The UTRL must be 1 to 128 characters in length, and is case-sensitive. You can use asterisks (\\*) and question marks (?) as wildcard characters.
     *   The URL must start with a forward slash (/) and can contain letters, digits, and the following special characters: `$ - _ .+ / & ~ @ :`. It cannot contain the following special characters: `" % # ; ! ( ) [ ] ^ , "`. You can use asterisks (\\*) and question marks (?) as wildcard characters.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The port to which requests are distributed.
     *
     *   **${port}** (default): If you set the value to ${port}, you cannot append other characters to the value.
     *   You can also enter a port number. Valid values: **1 to 63335**.
     *
     * @example 10
     *
     * @var string
     */
    public $port;

    /**
     * @description The redirect protocol. Valid values: Valid values:
     *
     *   **${protocol}** (default): If you set the value to ${protocol}, you cannot modify the value or append other characters.
     *   **HTTP**
     *   **HTTPS**
     *
     * >
     *
     *   HTTPS listeners support only HTTPS redirection.
     *
     *   HTTP listeners support HTTP and HTTPS redirection.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The query string to which requests are redirected.
     *
     *   Default value: **${query}**. **${host}**, **${protocol}**, and **${port}** are also supported. Each variable can be specified only once. The preceding variables can be used at the same time or combined with a custom value.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The query string must be 1 to 128 characters in length.
     *   It can contain printable characters, but cannot contain space characters, the special characters `# [ ] { } \\ | < > &`, or lowercase letters.
     *
     * @example ${query}
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
