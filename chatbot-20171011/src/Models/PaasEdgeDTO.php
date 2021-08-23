<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasEdgeDTO extends Model
{
    /**
     * @description Target
     *
     * @var string
     */
    public $target;

    /**
     * @description Id
     *
     * @var string
     */
    public $id;

    /**
     * @description Source
     *
     * @var string
     */
    public $source;

    /**
     * @description Label
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'target' => 'Target',
        'id'     => 'Id',
        'source' => 'Source',
        'label'  => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasEdgeDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
