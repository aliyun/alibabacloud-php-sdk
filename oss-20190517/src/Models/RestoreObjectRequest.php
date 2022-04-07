<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class RestoreObjectRequest extends Model
{
    /**
     * @var RestoreRequest
     */
    public $restoreRequest;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'restoreRequest' => 'RestoreRequest',
        'versionId'      => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreRequest) {
            $res['RestoreRequest'] = null !== $this->restoreRequest ? $this->restoreRequest->toMap() : null;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreRequest'])) {
            $model->restoreRequest = RestoreRequest::fromMap($map['RestoreRequest']);
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
