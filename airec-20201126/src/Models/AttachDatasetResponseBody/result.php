<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\AttachDatasetResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the data source was created.
     *
     * @example 1544112000000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the data source was last modified.
     *
     * @example 1544112000000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the instance.
     *
     * @example airec-cn-o400whm78004
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The state for the dataset of the current version. Example: Importing. The value indicates that the dataset of the current version is being imported.
     *
     * @example Importing
     *
     * @var string
     */
    public $state;

    /**
     * @description The version number of the dataset.
     *
     * @example 20181023214546
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'instanceId'  => 'instanceId',
        'state'       => 'state',
        'versionId'   => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
