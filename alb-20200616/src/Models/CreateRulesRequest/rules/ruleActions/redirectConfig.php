<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class redirectConfig extends Model
{
    /**
     * @description The redirect protocol. Valid values:
     *
     *   **${protocol}** (default): If you set the value to ${protocol}, you cannot append other characters.
     *   You can set the protocol to **HTTP** or **HTTPS**.
     *
     * >  HTTPS listeners do not support HTTPS-to-HTTP redirects.
     * @example www.example.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The query string of the URL to which requests are redirected.
     *
     *   Default value: **${query}**. **${host}**, **${protocol}**, and **${port}** are also supported. Each variable cannot be specified more than once. You can specify one or more of the preceding variables in each request. You can also combine them with the following characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The value is 1 to 128 characters in length.
     *   It can contain printable characters, except space characters, the special characters `# [ ] { } \ | < > &`, and uppercase letters.
     *
     * @example 301
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The hostname to which requests are redirected. Valid values:
     *
     *   **${host}** (default): If you set the value to ${host}, you cannot append other characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The hostname must be 3 to 128 characters in length, and can contain lowercase letters, digits, hyphens (-), and periods (.). You can use asterisks (\*) and question marks (?) as wildcard characters.
     *   The hostname must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label can contain only letters and wildcard characters. It cannot contain digits or hyphens (-).
     *   The domain labels cannot start or end with a hyphen (-). You can use an asterisk (\*) and question mark (?) as wildcards anywhere in a domain label.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The path to which requests are redirected. Valid values:
     *
     *   Default value: **${path}**. **${host}**, **${protocol}**, and **${port}** are also supported. Each variable cannot be specified more than once. You can specify one or more of the preceding variables in each request. You can also combine them with the following characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The value is 1 to 128 characters in length.
     *   It must start with a forward slash (/) and can contain letters, digits, and the following special characters: `$ - _ .+ / & ~ @ :`. It cannot contain the following special characters: `" % # ; ! ( ) [ ]^ , "`. You can use asterisks (\*) and question marks (?) as wildcards.
     *   The value is case-sensitive.
     *
     * @example 10
     *
     * @var string
     */
    public $port;

    /**
     * @description The query string of the URL to which requests are redirected.
     *
     *   Default value: **${query}**. **${host}**, **${protocol}**, and **${port}** are also supported. Each variable cannot be specified more than once. You can specify one or more of the preceding variables in each request. You can also combine them with the following characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The value is 1 to 128 characters in length.
     *   It can contain printable characters, except space characters, the special characters `# [ ] { } \ | < > &`, and uppercase letters.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The action type. You can specify at most 11 types of action. Valid values:
     *
     *   **ForwardGroup**: forwards a request to multiple vServer groups.
     *   **Redirect**: redirects a request.
     *   **FixedResponse**: returns a custom response.
     *   **Rewrite**: rewrites a request.
     *   **InsertHeader**: inserts a header.
     *   **RemoveHeaderConfig**: deletes a header.
     *   **TrafficLimitConfig**: throttles network traffic.
     *   **TrafficMirrorConfig**: mirrors network traffic.
     *   **CORS**: enables cross-origin resource sharing (CORS).
     *
     * You can specify the last action and the actions that you want to perform before the last action:
     *
     *   **FinalType**: the last action to be performed in a forwarding rule. Each forwarding rule can contain only one FinalType action. You can specify a **ForwardGroup**, **Redirect**, or **FixedResponse** action as the FinalType action.
     *   **ExtType**: the action to be performed before the FinalType action. A forwarding rule can contain one or more ExtType actions. To specify this parameter, you must also specify FinalType. You can specify multiple **InsertHeader** actions or one **Rewrite** action.
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
