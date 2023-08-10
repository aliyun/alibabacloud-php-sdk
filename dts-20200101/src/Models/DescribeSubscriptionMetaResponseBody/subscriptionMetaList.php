<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaResponseBody;

use AlibabaCloud\Tea\Model;

class subscriptionMetaList extends Model
{
    /**
     * @description The consumer offset of the subtask. It is a UNIX timestamp that is generated when the client consumes the first data record. Unit: seconds.
     *
     * >  You can use a search engine to obtain a UNIX timestamp converter.
     * @example 1610524452
     *
     * @var int
     */
    public $checkpoint;

    /**
     * @description The objects of the subtask. For more information, see [Objects of DTS tasks](~~209545~~).
     *
     * @example {\"dtstestdata\":{\"name\":\"dtstestdata\",\"all\":false,\"Table\":{\"order\":{\"name\":\"order\",\"all\":true}}}}
     *
     * @var string
     */
    public $DBList;

    /**
     * @description The endpoint and port number of the change tracking instance.
     *
     * @example dts-cn-hangzhou.aliyuncs.com:18001
     *
     * @var string
     */
    public $DProxyUrl;

    /**
     * @description The consumer group ID of the subtask.
     *
     * @example z38m91gg2******
     *
     * @var string
     */
    public $sid;

    /**
     * @description The topic of the subtask.
     *
     * @example cn_hangzhou_rm_bp1n0x0x5tz******_dtstestdata_version2
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'checkpoint' => 'Checkpoint',
        'DBList'     => 'DBList',
        'DProxyUrl'  => 'DProxyUrl',
        'sid'        => 'Sid',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->DBList) {
            $res['DBList'] = $this->DBList;
        }
        if (null !== $this->DProxyUrl) {
            $res['DProxyUrl'] = $this->DProxyUrl;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['DBList'])) {
            $model->DBList = $map['DBList'];
        }
        if (isset($map['DProxyUrl'])) {
            $model->DProxyUrl = $map['DProxyUrl'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
