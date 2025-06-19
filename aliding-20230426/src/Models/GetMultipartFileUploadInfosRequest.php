<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest\tenantContext;

class GetMultipartFileUploadInfosRequest extends Model
{
    /**
     * @var option
     */
    public $option;

    /**
     * @var int[]
     */
    public $partNumbers;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $uploadKey;
    protected $_name = [
        'option' => 'Option',
        'partNumbers' => 'PartNumbers',
        'tenantContext' => 'TenantContext',
        'uploadKey' => 'UploadKey',
    ];

    public function validate()
    {
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (\is_array($this->partNumbers)) {
            Model::validateArray($this->partNumbers);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->partNumbers) {
            if (\is_array($this->partNumbers)) {
                $res['PartNumbers'] = [];
                $n1 = 0;
                foreach ($this->partNumbers as $item1) {
                    $res['PartNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->uploadKey) {
            $res['UploadKey'] = $this->uploadKey;
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
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }

        if (isset($map['PartNumbers'])) {
            if (!empty($map['PartNumbers'])) {
                $model->partNumbers = [];
                $n1 = 0;
                foreach ($map['PartNumbers'] as $item1) {
                    $model->partNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['UploadKey'])) {
            $model->uploadKey = $map['UploadKey'];
        }

        return $model;
    }
}
