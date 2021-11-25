<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat\address;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat\tag;
use AlibabaCloud\Tea\Model;

class mediaFormat extends Model
{
    /**
     * @var address
     */
    public $address;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $formatLongName;

    /**
     * @var string
     */
    public $formatName;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $numberPrograms;

    /**
     * @var int
     */
    public $numberStreams;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var tag
     */
    public $tag;
    protected $_name = [
        'address'        => 'Address',
        'bitrate'        => 'Bitrate',
        'creationTime'   => 'CreationTime',
        'duration'       => 'Duration',
        'formatLongName' => 'FormatLongName',
        'formatName'     => 'FormatName',
        'location'       => 'Location',
        'numberPrograms' => 'NumberPrograms',
        'numberStreams'  => 'NumberStreams',
        'size'           => 'Size',
        'startTime'      => 'StartTime',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->formatLongName) {
            $res['FormatLongName'] = $this->formatLongName;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->numberPrograms) {
            $res['NumberPrograms'] = $this->numberPrograms;
        }
        if (null !== $this->numberStreams) {
            $res['NumberStreams'] = $this->numberStreams;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
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
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FormatLongName'])) {
            $model->formatLongName = $map['FormatLongName'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['NumberPrograms'])) {
            $model->numberPrograms = $map['NumberPrograms'];
        }
        if (isset($map['NumberStreams'])) {
            $model->numberStreams = $map['NumberStreams'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }

        return $model;
    }
}
