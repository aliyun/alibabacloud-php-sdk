<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class releaseVersions extends Model
{
    /**
     * @var string
     */
    public $communityVersion;

    /**
     * @var string[]
     */
    public $cpuArchitectures;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var bool
     */
    public $fusion;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $iaasType;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var string
     */
    public $scalaVersion;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'communityVersion' => 'communityVersion',
        'cpuArchitectures' => 'cpuArchitectures',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'fusion' => 'fusion',
        'gmtCreate' => 'gmtCreate',
        'iaasType' => 'iaasType',
        'releaseVersion' => 'releaseVersion',
        'scalaVersion' => 'scalaVersion',
        'state' => 'state',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->cpuArchitectures)) {
            Model::validateArray($this->cpuArchitectures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->communityVersion) {
            $res['communityVersion'] = $this->communityVersion;
        }

        if (null !== $this->cpuArchitectures) {
            if (\is_array($this->cpuArchitectures)) {
                $res['cpuArchitectures'] = [];
                $n1 = 0;
                foreach ($this->cpuArchitectures as $item1) {
                    $res['cpuArchitectures'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->iaasType) {
            $res['iaasType'] = $this->iaasType;
        }

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->scalaVersion) {
            $res['scalaVersion'] = $this->scalaVersion;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['communityVersion'])) {
            $model->communityVersion = $map['communityVersion'];
        }

        if (isset($map['cpuArchitectures'])) {
            if (!empty($map['cpuArchitectures'])) {
                $model->cpuArchitectures = [];
                $n1 = 0;
                foreach ($map['cpuArchitectures'] as $item1) {
                    $model->cpuArchitectures[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['iaasType'])) {
            $model->iaasType = $map['iaasType'];
        }

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['scalaVersion'])) {
            $model->scalaVersion = $map['scalaVersion'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
