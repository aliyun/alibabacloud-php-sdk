<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponseBody\data\param;

class data extends Model
{
    /**
     * @var string
     */
    public $fileUploadLeaseId;

    /**
     * @var param
     */
    public $param;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fileUploadLeaseId' => 'FileUploadLeaseId',
        'param' => 'Param',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileUploadLeaseId) {
            $res['FileUploadLeaseId'] = $this->fileUploadLeaseId;
        }

        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FileUploadLeaseId'])) {
            $model->fileUploadLeaseId = $map['FileUploadLeaseId'];
        }

        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
