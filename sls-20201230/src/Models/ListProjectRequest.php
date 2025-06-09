<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListProjectRequest extends Model
{
    /**
     * @var bool
     */
    public $fetchQuota;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'fetchQuota' => 'fetchQuota',
        'offset' => 'offset',
        'projectName' => 'projectName',
        'resourceGroupId' => 'resourceGroupId',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fetchQuota) {
            $res['fetchQuota'] = $this->fetchQuota;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['fetchQuota'])) {
            $model->fetchQuota = $map['fetchQuota'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
