<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAccessPagesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessMode;
    /**
     * @var string
     */
    public $accessPageId;
    /**
     * @var string
     */
    public $accessPageName;
    /**
     * @var string
     */
    public $accessPageState;
    /**
     * @var string
     */
    public $accessUrl;
    /**
     * @var string
     */
    public $contentId;
    /**
     * @var string
     */
    public $contentName;
    /**
     * @var int
     */
    public $effectTime;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectName;
    /**
     * @var string
     */
    public $unit;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
