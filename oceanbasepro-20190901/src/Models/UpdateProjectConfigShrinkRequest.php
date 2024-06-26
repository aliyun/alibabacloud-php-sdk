<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commonTransferConfigShrink;

    /**
     * @var string
     */
    public $fullTransferConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @example np_fe****
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $incrTransferConfigShrink;

    /**
     * @var string
     */
    public $reverseIncrTransferConfigShrink;
    protected $_name = [
        'commonTransferConfigShrink'      => 'CommonTransferConfig',
        'fullTransferConfigShrink'        => 'FullTransferConfig',
        'id'                              => 'Id',
        'incrTransferConfigShrink'        => 'IncrTransferConfig',
        'reverseIncrTransferConfigShrink' => 'ReverseIncrTransferConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonTransferConfigShrink) {
            $res['CommonTransferConfig'] = $this->commonTransferConfigShrink;
        }
        if (null !== $this->fullTransferConfigShrink) {
            $res['FullTransferConfig'] = $this->fullTransferConfigShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->incrTransferConfigShrink) {
            $res['IncrTransferConfig'] = $this->incrTransferConfigShrink;
        }
        if (null !== $this->reverseIncrTransferConfigShrink) {
            $res['ReverseIncrTransferConfig'] = $this->reverseIncrTransferConfigShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonTransferConfig'])) {
            $model->commonTransferConfigShrink = $map['CommonTransferConfig'];
        }
        if (isset($map['FullTransferConfig'])) {
            $model->fullTransferConfigShrink = $map['FullTransferConfig'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncrTransferConfig'])) {
            $model->incrTransferConfigShrink = $map['IncrTransferConfig'];
        }
        if (isset($map['ReverseIncrTransferConfig'])) {
            $model->reverseIncrTransferConfigShrink = $map['ReverseIncrTransferConfig'];
        }

        return $model;
    }
}
