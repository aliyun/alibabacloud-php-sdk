<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class rewriteConfig extends Model
{
    /**
     * @description The hostname to which requests are forwarded. Valid values:
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
     * @description The path to which requests are forwarded. The path is 1 to 128 characters in length and starts with a forward slash (/). The path can contain letters, digits, asterisks (\\*), question marks (?), and the following special characters: `$ - _ . + / & ~ @ :`. The path does not contain the following special characters: `" % # ; ! ( ) [ ] ^ , "`.
     *
     * @example /tsdf
     *
     * @var string
     */
    public $path;

    /**
     * @description The query string of the URL to which requests are forwarded. The query string is 1 to 128 characters in length, and can contain printable characters, excluding uppercase letters and the following special characters: `# [ ] { } \\ | < > &`.
     *
     * @example quedsa
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'host'  => 'Host',
        'path'  => 'Path',
        'query' => 'Query',
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
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rewriteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
