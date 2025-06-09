<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetCollectionPolicyResponseBody\collectionPolicy;

use AlibabaCloud\Dara\Model;

class centralizeConfig extends Model
{
    /**
     * @var string
     */
    public $destLogstore;

    /**
     * @var string
     */
    public $destProject;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var int
     */
    public $destTTL;
    protected $_name = [
        'destLogstore' => 'destLogstore',
        'destProject' => 'destProject',
        'destRegion' => 'destRegion',
        'destTTL' => 'destTTL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
