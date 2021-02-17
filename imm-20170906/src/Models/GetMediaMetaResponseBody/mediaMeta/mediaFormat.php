<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat\address;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat\tag;
use AlibabaCloud\Tea\Model;

class mediaFormat extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $numberPrograms;

    /**
     * @var int
     */
    public $numberStreams;

    /**
     * @var tag
     */
    public $tag;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $size;

    /**
     * @var address
     */
    public $address;

    /**
     * @var string
     */
    public $formatLongName;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $formatName;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'numberPrograms' => 'NumberPrograms',
        'numberStreams'  => 'NumberStreams',
        'tag'            => 'Tag',
        'bitrate'        => 'Bitrate',
        'startTime'      => 'StartTime',
        'size'           => 'Size',
        'address'        => 'Address',
        'formatLongName' => 'FormatLongName',
        'duration'       => 'Duration',
        'formatName'     => 'FormatName',
        'location'       => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->numberPrograms) {
            $res['NumberPrograms'] = $this->numberPrograms;
        }
        if (null !== $this->numberStreams) {
            $res['NumberStreams'] = $this->numberStreams;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->formatLongName) {
            $res['FormatLongName'] = $this->formatLongName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaFormat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['NumberPrograms'])) {
            $model->numberPrograms = $map['NumberPrograms'];
        }
        if (isset($map['NumberStreams'])) {
            $model->numberStreams = $map['NumberStreams'];
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
        }
        if (isset($map['FormatLongName'])) {
            $model->formatLongName = $map['FormatLongName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
