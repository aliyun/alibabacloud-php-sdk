<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class minorVersionItems extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var bool
     */
    public $isHotfixVersion;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'engine'          => 'Engine',
        'engineVersion'   => 'EngineVersion',
        'isHotfixVersion' => 'IsHotfixVersion',
        'minorVersion'    => 'MinorVersion',
        'nodeType'        => 'NodeType',
        'releaseNote'     => 'ReleaseNote',
        'releaseType'     => 'ReleaseType',
        'statusDesc'      => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->isHotfixVersion) {
            $res['IsHotfixVersion'] = $this->isHotfixVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return minorVersionItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['IsHotfixVersion'])) {
            $model->isHotfixVersion = $map['IsHotfixVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
