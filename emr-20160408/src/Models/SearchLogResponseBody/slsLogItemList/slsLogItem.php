<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogResponseBody\slsLogItemList;

use AlibabaCloud\Tea\Model;

class slsLogItem extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $packId;

    /**
     * @var string
     */
    public $packMeta;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'content'   => 'Content',
        'hostName'  => 'HostName',
        'packId'    => 'PackId',
        'packMeta'  => 'PackMeta',
        'path'      => 'Path',
        'sourceIp'  => 'SourceIp',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->packId) {
            $res['PackId'] = $this->packId;
        }
        if (null !== $this->packMeta) {
            $res['PackMeta'] = $this->packMeta;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['PackId'])) {
            $model->packId = $map['PackId'];
        }
        if (isset($map['PackMeta'])) {
            $model->packMeta = $map['PackMeta'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
