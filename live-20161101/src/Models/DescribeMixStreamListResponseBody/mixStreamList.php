<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponseBody;

use AlibabaCloud\Tea\Model;

class mixStreamList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $inputStreamNumber;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $mixStreamTemplate;

    /**
     * @var string
     */
    public $mixstreamId;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'           => 'AppName',
        'domainName'        => 'DomainName',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'inputStreamNumber' => 'InputStreamNumber',
        'layoutId'          => 'LayoutId',
        'mixStreamTemplate' => 'MixStreamTemplate',
        'mixstreamId'       => 'MixstreamId',
        'streamName'        => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->inputStreamNumber) {
            $res['InputStreamNumber'] = $this->inputStreamNumber;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->mixStreamTemplate) {
            $res['MixStreamTemplate'] = $this->mixStreamTemplate;
        }
        if (null !== $this->mixstreamId) {
            $res['MixstreamId'] = $this->mixstreamId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InputStreamNumber'])) {
            $model->inputStreamNumber = $map['InputStreamNumber'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['MixStreamTemplate'])) {
            $model->mixStreamTemplate = $map['MixStreamTemplate'];
        }
        if (isset($map['MixstreamId'])) {
            $model->mixstreamId = $map['MixstreamId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
