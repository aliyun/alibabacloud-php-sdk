<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class PreviewOutputFileRequest extends Model
{
    /**
     * @var string
     */
    public $outputItemId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'outputItemId' => 'outputItemId',
        'tenantId' => 'tenantId',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputItemId) {
            $res['outputItemId'] = $this->outputItemId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['outputItemId'])) {
            $model->outputItemId = $map['outputItemId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
