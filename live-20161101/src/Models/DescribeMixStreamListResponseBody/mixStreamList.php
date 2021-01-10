<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponseBody;

use AlibabaCloud\Tea\Model;

class mixStreamList extends Model
{
    /**
     * @var string
     */
    public $mixStreamTemplate;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $mixstreamId;

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
    public $domainName;
    protected $_name = [
        'mixStreamTemplate' => 'MixStreamTemplate',
        'appName'           => 'AppName',
        'layoutId'          => 'LayoutId',
        'streamName'        => 'StreamName',
        'gmtCreate'         => 'GmtCreate',
        'mixstreamId'       => 'MixstreamId',
        'gmtModified'       => 'GmtModified',
        'inputStreamNumber' => 'InputStreamNumber',
        'domainName'        => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixStreamTemplate) {
            $res['MixStreamTemplate'] = $this->mixStreamTemplate;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->mixstreamId) {
            $res['MixstreamId'] = $this->mixstreamId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->inputStreamNumber) {
            $res['InputStreamNumber'] = $this->inputStreamNumber;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['MixStreamTemplate'])) {
            $model->mixStreamTemplate = $map['MixStreamTemplate'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['MixstreamId'])) {
            $model->mixstreamId = $map['MixstreamId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InputStreamNumber'])) {
            $model->inputStreamNumber = $map['InputStreamNumber'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
