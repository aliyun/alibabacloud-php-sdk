<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody\searchLibInfoList;

use AlibabaCloud\Dara\Model;

class indexInfo extends Model
{
    /**
     * @var string
     */
    public $indexReadiness;
    /**
     * @var string
     */
    public $indexStatus;
    /**
     * @var string
     */
    public $indexType;
    protected $_name = [
        'indexReadiness' => 'IndexReadiness',
        'indexStatus'    => 'IndexStatus',
        'indexType'      => 'IndexType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexReadiness) {
            $res['IndexReadiness'] = $this->indexReadiness;
        }

        if (null !== $this->indexStatus) {
            $res['IndexStatus'] = $this->indexStatus;
        }

        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
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
        if (isset($map['IndexReadiness'])) {
            $model->indexReadiness = $map['IndexReadiness'];
        }

        if (isset($map['IndexStatus'])) {
            $model->indexStatus = $map['IndexStatus'];
        }

        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }

        return $model;
    }
}
