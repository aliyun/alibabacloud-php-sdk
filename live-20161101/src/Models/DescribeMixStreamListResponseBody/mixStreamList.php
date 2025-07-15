<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponseBody;

use AlibabaCloud\Tea\Model;

class mixStreamList extends Model
{
    /**
     * @description The name of the application.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time when the stream mixing task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-09-17T08:39:14Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the stream mixing task was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-09-17T08:39:15Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The number of input streams.
     *
     * @example 2
     *
     * @var int
     */
    public $inputStreamNumber;

    /**
     * @description The ID of the layout.
     *
     * @example USERDEFINED
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description The stream mixing template.
     *
     * @example lp_ld
     *
     * @var string
     */
    public $mixStreamTemplate;

    /**
     * @description The ID of the stream mixing task. You can specify this parameter in a request to delete the steam mixing task.
     *
     * @example aaf9a50f-c460-3a9b-f180-38dd8f05****
     *
     * @var string
     */
    public $mixstreamId;

    /**
     * @description The name of the output stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'inputStreamNumber' => 'InputStreamNumber',
        'layoutId' => 'LayoutId',
        'mixStreamTemplate' => 'MixStreamTemplate',
        'mixstreamId' => 'MixstreamId',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

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
