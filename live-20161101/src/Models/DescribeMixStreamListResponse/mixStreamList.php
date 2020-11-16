<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponse;

use AlibabaCloud\Tea\Model;

class mixStreamList extends Model
{
    /**
     * @var string
     */
    public $mixstreamId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var int
     */
    public $inputStreamNumber;

    /**
     * @var string
     */
    public $mixStreamTemplate;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'mixstreamId'       => 'MixstreamId',
        'domainName'        => 'DomainName',
        'appName'           => 'AppName',
        'streamName'        => 'StreamName',
        'layoutId'          => 'LayoutId',
        'inputStreamNumber' => 'InputStreamNumber',
        'mixStreamTemplate' => 'MixStreamTemplate',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
    ];

    public function validate()
    {
        Model::validateRequired('mixstreamId', $this->mixstreamId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('layoutId', $this->layoutId, true);
        Model::validateRequired('inputStreamNumber', $this->inputStreamNumber, true);
        Model::validateRequired('mixStreamTemplate', $this->mixStreamTemplate, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixstreamId) {
            $res['MixstreamId'] = $this->mixstreamId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->inputStreamNumber) {
            $res['InputStreamNumber'] = $this->inputStreamNumber;
        }
        if (null !== $this->mixStreamTemplate) {
            $res['MixStreamTemplate'] = $this->mixStreamTemplate;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mixStreamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixstreamId'])) {
            $model->mixstreamId = $map['MixstreamId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['InputStreamNumber'])) {
            $model->inputStreamNumber = $map['InputStreamNumber'];
        }
        if (isset($map['MixStreamTemplate'])) {
            $model->mixStreamTemplate = $map['MixStreamTemplate'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
