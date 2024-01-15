<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAccessPagesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessMode;

    /**
     * @example a-062wec3cwmayw****
     *
     * @var string
     */
    public $accessPageId;

    /**
     * @example notepad_test
     *
     * @var string
     */
    public $accessPageName;

    /**
     * @example 1
     *
     * @var string
     */
    public $accessPageState;

    /**
     * @example id=a-062wec3cwmayw****&token=9E9A62937B0E41F4AEFE5EC9B238156CCDFB682954003AEE940A05FB2568****
     *
     * @var string
     */
    public $accessUrl;

    /**
     * @example c-05to6wm3w5d53****
     *
     * @var string
     */
    public $contentId;

    /**
     * @var string
     */
    public $contentName;

    /**
     * @example 168
     *
     * @var int
     */
    public $effectTime;

    /**
     * @example 2023-11-16T08:48:15.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example p-062wec3cwmayu****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example notepad_demo
     *
     * @var string
     */
    public $projectName;

    /**
     * @example Hour
     *
     * @var string
     */
    public $unit;

    /**
     * @example 2023-11-23T08:48:15.000+00:00
     *
     * @var string
     */
    public $urlExpireTime;
    protected $_name = [
        'accessMode'      => 'AccessMode',
        'accessPageId'    => 'AccessPageId',
        'accessPageName'  => 'AccessPageName',
        'accessPageState' => 'AccessPageState',
        'accessUrl'       => 'AccessUrl',
        'contentId'       => 'ContentId',
        'contentName'     => 'ContentName',
        'effectTime'      => 'EffectTime',
        'gmtCreate'       => 'GmtCreate',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'unit'            => 'Unit',
        'urlExpireTime'   => 'UrlExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }
        if (null !== $this->accessPageName) {
            $res['AccessPageName'] = $this->accessPageName;
        }
        if (null !== $this->accessPageState) {
            $res['AccessPageState'] = $this->accessPageState;
        }
        if (null !== $this->accessUrl) {
            $res['AccessUrl'] = $this->accessUrl;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
        }
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->urlExpireTime) {
            $res['UrlExpireTime'] = $this->urlExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }
        if (isset($map['AccessPageName'])) {
            $model->accessPageName = $map['AccessPageName'];
        }
        if (isset($map['AccessPageState'])) {
            $model->accessPageState = $map['AccessPageState'];
        }
        if (isset($map['AccessUrl'])) {
            $model->accessUrl = $map['AccessUrl'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
        }
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['UrlExpireTime'])) {
            $model->urlExpireTime = $map['UrlExpireTime'];
        }

        return $model;
    }
}
