<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationMseServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $mseAppId;

    /**
     * @var string
     */
    public $mseAppName;

    /**
     * @var string
     */
    public $mseAppNameSpace;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'mseAppId' => 'MseAppId',
        'mseAppName' => 'MseAppName',
        'mseAppNameSpace' => 'MseAppNameSpace',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mseAppId) {
            $res['MseAppId'] = $this->mseAppId;
        }

        if (null !== $this->mseAppName) {
            $res['MseAppName'] = $this->mseAppName;
        }

        if (null !== $this->mseAppNameSpace) {
            $res['MseAppNameSpace'] = $this->mseAppNameSpace;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['MseAppId'])) {
            $model->mseAppId = $map['MseAppId'];
        }

        if (isset($map['MseAppName'])) {
            $model->mseAppName = $map['MseAppName'];
        }

        if (isset($map['MseAppNameSpace'])) {
            $model->mseAppNameSpace = $map['MseAppNameSpace'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
