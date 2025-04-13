<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\MultiSourcePointBatchUploadResponseBody\data;

use AlibabaCloud\Dara\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $node;

    /**
     * @var string
     */
    public $sourcePoint;
    protected $_name = [
        'errorMsg' => 'ErrorMsg',
        'node' => 'Node',
        'sourcePoint' => 'SourcePoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        if (null !== $this->sourcePoint) {
            $res['SourcePoint'] = $this->sourcePoint;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        if (isset($map['SourcePoint'])) {
            $model->sourcePoint = $map['SourcePoint'];
        }

        return $model;
    }
}
