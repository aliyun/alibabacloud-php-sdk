<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class rewriteConfig extends Model
{
    /**
     * @description The hostname to which requests are forwarded.
     *
     * Take note of the following rules when you specify a hostname:
     *
     *   The hostname must be 3 to 128 characters in length, and can contain lowercase letters, digits, and the following special characters: - . \\* = ~ _ + \\ ^ ! $ & | ( ) [ ] ?.
     *   The hostname must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label can contain only letters, asterisks (*), and question marks (?), and cannot contain digits or hyphens (-). The leftmost `domain label` can contain asterisks (*).
     *   The domain labels cannot start or end with a hyphen (-). You can specify asterisks (∗) and question marks (?) anywhere in a domain label.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The path to which requests are forwarded.
     *
     *   **${path}** (default): You can reference \\*\\*${host}**, **${protocol}** and **${port}\\*\\*. Each variable can be used only once. You can specify one or more of the preceding variables in each request. You can also combine them with a custom value.
     *
     *   A custom value that meets the following requirements:
     *
     *   The custom value must be 1 to 128 characters in length. You can use asterisks (\\*) and question marks (?) as wildcards.
     *   The custom value can contain letters, digits, and the following special characters: `$ - _ . + / & ~ @ : \\" * ?`. The custom value must start with a forward slash (/) and cannot contain the following characters: `" % # ; ! ( ) [ ] ^ , "`.
     *
     * @example /tsdf
     *
     * @var string
     */
    public $path;

    /**
     * @description The query string to which requests are forwarded.
     *
     * The query string must be 1 to 128 characters in length, and can contain printable characters, excluding uppercase letters and the following special characters: `# [ ] { } \\ | < > &`.
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
