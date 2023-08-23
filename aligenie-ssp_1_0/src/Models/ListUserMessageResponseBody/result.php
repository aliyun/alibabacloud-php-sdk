<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @example 2022-07-27 14:06:27.000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 123456
     *
     * @var string
     */
    public $id;

    /**
     * @example http://xx
     *
     * @var string
     */
    public $pic;

    /**
     * @example app
     *
     * @var string
     */
    public $source;

    /**
     * @example AF188**065EE4B**DD68CE**951D84D4
     *
     * @var string
     */
    public $sourceUuid;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example audio
     *
     * @var string
     */
    public $type;

    /**
     * @example http://xx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content'    => 'Content',
        'deviceName' => 'DeviceName',
        'gmtCreate'  => 'GmtCreate',
        'id'         => 'Id',
        'pic'        => 'Pic',
        'source'     => 'Source',
        'sourceUuid' => 'SourceUuid',
        'status'     => 'Status',
        'type'       => 'Type',
        'url'        => 'Url',
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
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pic) {
            $res['Pic'] = $this->pic;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceUuid) {
            $res['SourceUuid'] = $this->sourceUuid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Pic'])) {
            $model->pic = $map['Pic'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceUuid'])) {
            $model->sourceUuid = $map['SourceUuid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
