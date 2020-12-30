<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogResponseBody\slsLogItemList;

use AlibabaCloud\Tea\Model;

class slsLogItem extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $packId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $packMeta;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'packId'    => 'PackId',
        'path'      => 'Path',
        'hostName'  => 'HostName',
        'timestamp' => 'Timestamp',
        'content'   => 'Content',
        'packMeta'  => 'PackMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->packId) {
            $res['PackId'] = $this->packId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->packMeta) {
            $res['PackMeta'] = $this->packMeta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsLogItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['PackId'])) {
            $model->packId = $map['PackId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['PackMeta'])) {
            $model->packMeta = $map['PackMeta'];
        }

        return $model;
    }
}
