<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class player extends Model
{
    /**
     * @var string
     */
    public $audioAlbum;

    /**
     * @var string
     */
    public $audioAnchor;

    /**
     * @var string
     */
    public $audioExt;

    /**
     * @var string
     */
    public $audioId;

    /**
     * @var string
     */
    public $audioLength;

    /**
     * @var string
     */
    public $audioName;

    /**
     * @var string
     */
    public $audioSource;

    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'audioAlbum'  => 'AudioAlbum',
        'audioAnchor' => 'AudioAnchor',
        'audioExt'    => 'AudioExt',
        'audioId'     => 'AudioId',
        'audioLength' => 'AudioLength',
        'audioName'   => 'AudioName',
        'audioSource' => 'AudioSource',
        'audioUrl'    => 'AudioUrl',
        'format'      => 'Format',
        'progress'    => 'Progress',
        'source'      => 'Source',
        'status'      => 'Status',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioAlbum) {
            $res['AudioAlbum'] = $this->audioAlbum;
        }
        if (null !== $this->audioAnchor) {
            $res['AudioAnchor'] = $this->audioAnchor;
        }
        if (null !== $this->audioExt) {
            $res['AudioExt'] = $this->audioExt;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->audioLength) {
            $res['AudioLength'] = $this->audioLength;
        }
        if (null !== $this->audioName) {
            $res['AudioName'] = $this->audioName;
        }
        if (null !== $this->audioSource) {
            $res['AudioSource'] = $this->audioSource;
        }
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return player
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioAlbum'])) {
            $model->audioAlbum = $map['AudioAlbum'];
        }
        if (isset($map['AudioAnchor'])) {
            $model->audioAnchor = $map['AudioAnchor'];
        }
        if (isset($map['AudioExt'])) {
            $model->audioExt = $map['AudioExt'];
        }
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['AudioLength'])) {
            $model->audioLength = $map['AudioLength'];
        }
        if (isset($map['AudioName'])) {
            $model->audioName = $map['AudioName'];
        }
        if (isset($map['AudioSource'])) {
            $model->audioSource = $map['AudioSource'];
        }
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
