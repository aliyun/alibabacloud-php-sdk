<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest;

use AlibabaCloud\Tea\Model;

class centralizeConfig extends Model
{
    /**
     * @example your-sls-logstore-in-beijing
     *
     * @var string
     */
    public $destLogstore;

    /**
     * @example your-sls-project-in-beijing
     *
     * @var string
     */
    public $destProject;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $destRegion;

    /**
     * @example your-sls-logstore-ttl
     *
     * @var int
     */
    public $destTTL;
    protected $_name = [
        'destLogstore' => 'destLogstore',
        'destProject'  => 'destProject',
        'destRegion'   => 'destRegion',
        'destTTL'      => 'destTTL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destLogstore) {
            $res['destLogstore'] = $this->destLogstore;
        }
        if (null !== $this->destProject) {
            $res['destProject'] = $this->destProject;
        }
        if (null !== $this->destRegion) {
            $res['destRegion'] = $this->destRegion;
        }
        if (null !== $this->destTTL) {
            $res['destTTL'] = $this->destTTL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return centralizeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destLogstore'])) {
            $model->destLogstore = $map['destLogstore'];
        }
        if (isset($map['destProject'])) {
            $model->destProject = $map['destProject'];
        }
        if (isset($map['destRegion'])) {
            $model->destRegion = $map['destRegion'];
        }
        if (isset($map['destTTL'])) {
            $model->destTTL = $map['destTTL'];
        }

        return $model;
    }
}
