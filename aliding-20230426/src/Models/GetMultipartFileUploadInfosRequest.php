<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest\tenantContext;
use AlibabaCloud\Tea\Model;

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
     * @example hwHPAAAAAipHxxxxx
     *
     * @var string
     */
    public $uploadKey;
    protected $_name = [
        'option' => 'Option',
        'partNumbers' => 'PartNumbers',
        'tenantContext' => 'TenantContext',
        'uploadKey' => 'UploadKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toMap() : null;
        }
        if (null !== $this->partNumbers) {
            $res['PartNumbers'] = $this->partNumbers;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->uploadKey) {
            $res['UploadKey'] = $this->uploadKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipartFileUploadInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }
        if (isset($map['PartNumbers'])) {
            if (!empty($map['PartNumbers'])) {
                $model->partNumbers = $map['PartNumbers'];
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
