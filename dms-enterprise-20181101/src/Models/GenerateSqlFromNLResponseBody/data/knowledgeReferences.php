<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GenerateSqlFromNLResponseBody\data;

use AlibabaCloud\Tea\Model;

class knowledgeReferences extends Model
{
    /**
     * @example {\\"Status\\": \\"OK\\"}
     *
     * @var string
     */
    public $content;

    /**
     * @example verified
     *
     * @var string
     */
    public $level;

    /**
     * @example sample_tbl
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'content' => 'Content',
        'level' => 'Level',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return knowledgeReferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
