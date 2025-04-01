<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ScaleConfig extends Model
{
    /**
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @var int
     */
    public $maximumInstanceCount;

    /**
     * @var int
     */
    public $minimumInstanceCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alwaysAllocateCPU' => 'alwaysAllocateCPU',
        'maximumInstanceCount' => 'maximumInstanceCount',
        'minimumInstanceCount' => 'minimumInstanceCount',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alwaysAllocateCPU) {
            $res['alwaysAllocateCPU'] = $this->alwaysAllocateCPU;
        }

        if (null !== $this->maximumInstanceCount) {
            $res['maximumInstanceCount'] = $this->maximumInstanceCount;
        }

        if (null !== $this->minimumInstanceCount) {
            $res['minimumInstanceCount'] = $this->minimumInstanceCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['alwaysAllocateCPU'])) {
            $model->alwaysAllocateCPU = $map['alwaysAllocateCPU'];
        }

        if (isset($map['maximumInstanceCount'])) {
            $model->maximumInstanceCount = $map['maximumInstanceCount'];
        }

        if (isset($map['minimumInstanceCount'])) {
            $model->minimumInstanceCount = $map['minimumInstanceCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
