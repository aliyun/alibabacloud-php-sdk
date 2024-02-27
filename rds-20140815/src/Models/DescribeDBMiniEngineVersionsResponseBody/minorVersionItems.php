<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class minorVersionItems extends Model
{
    /**
     * @description The PostgreSQL version to which the minor engine version corresponds. For more information, see [Release notes for AliPG](~~126002~~).
     *
     * >  This parameter is available only for instances that run **PostgreSQL**.
     * @example 13.6
     *
     * @var string
     */
    public $communityMinorVersion;

    /**
     * @description The database engine that corresponds to the minor engine version.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version that corresponds to the minor engine version.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The expiration time of the minor engine version.
     *
     * @example 20231213
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description The expiration status of the minor engine version. Valid values:
     *
     *   **vaild**
     *   **expired**
     *
     * >  If the minor engine version is in the Offline state, the minor engine version is discontinued. In this case, ignore the expiration status. If the minor engine version is in the Online state and the expiration state is expired, the minor engine version expires. If the expiration state is vaild, the minor engine version is still in its lifecycle.
     * @example vaild
     *
     * @var string
     */
    public $expireStatus;

    /**
     * @description An internal parameter. You do not need to specify this parameter.
     *
     * @example True
     *
     * @var bool
     */
    public $isHotfixVersion;

    /**
     * @description The minor engine version.
     *
     * @example rds_20220731
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @description The RDS edition of the instance that runs the minor engine version. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The URL of the release notes for the minor engine version.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description The release type. Valid values:
     *
     *   **LTS**: a long-term version
     *   **BETA**: a preview version
     *
     * @example BETA
     *
     * @var string
     */
    public $releaseType;

    /**
     * @description The status of the minor engine version. Valid values:
     *
     *   **Offline**: discontinued
     *   **Online**: available
     *
     * >  If the minor engine version is in the Offline state, the minor engine version is discontinued. In this case, ignore the expiration status. If the minor engine version is in the Online state and the expiration state is expired, the minor engine version expires. If the expiration state is vaild, the minor engine version is still in its lifecycle.
     * @example Online
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The tag that corresponds to the minor engine version. Valid values:
     *
     *   **pgsql_docker_image**: tag of common instances
     *   **pgsql_babelfish_image**: tag of instances for which Babelfish is enabled
     *
     * >  This parameter is available only for instances that run **PostgreSQL**.
     * @example pgsql_babelfish_image
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'communityMinorVersion' => 'CommunityMinorVersion',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'expireDate'            => 'ExpireDate',
        'expireStatus'          => 'ExpireStatus',
        'isHotfixVersion'       => 'IsHotfixVersion',
        'minorVersion'          => 'MinorVersion',
        'nodeType'              => 'NodeType',
        'releaseNote'           => 'ReleaseNote',
        'releaseType'           => 'ReleaseType',
        'statusDesc'            => 'StatusDesc',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->communityMinorVersion) {
            $res['CommunityMinorVersion'] = $this->communityMinorVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->expireStatus) {
            $res['ExpireStatus'] = $this->expireStatus;
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
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['CommunityMinorVersion'])) {
            $model->communityMinorVersion = $map['CommunityMinorVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ExpireStatus'])) {
            $model->expireStatus = $map['ExpireStatus'];
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
