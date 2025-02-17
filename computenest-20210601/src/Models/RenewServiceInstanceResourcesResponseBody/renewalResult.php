<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class renewalResult extends Model
{
    /**
     * @var int
     */
    public $failed;
    /**
     * @var int
     */
    public $succeeded;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failed'     => 'Failed',
        'succeeded'  => 'Succeeded',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }

        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }

        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
