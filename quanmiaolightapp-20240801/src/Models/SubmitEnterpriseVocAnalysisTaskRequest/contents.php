<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @example id-xxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'id' => 'id',
        'text' => 'text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
