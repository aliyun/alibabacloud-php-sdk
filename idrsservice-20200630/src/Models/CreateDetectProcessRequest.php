<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateDetectProcessRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @example {}
     *
     * @var string
     */
    public $draft;

    /**
     * @var string
     */
    public $name;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'Content',
        'draft'   => 'Draft',
        'name'    => 'Name',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->draft) {
            $res['Draft'] = $this->draft;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDetectProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Draft'])) {
            $model->draft = $map['Draft'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
