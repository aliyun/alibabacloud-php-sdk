<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class CreateDialogRequest extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var bool
     */
    public $enableLibrary;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $playCode;

    /**
     * @var string[]
     */
    public $qaLibraryList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $selfDirected;
    protected $_name = [
        'channel' => 'channel',
        'enableLibrary' => 'enableLibrary',
        'metaData' => 'metaData',
        'playCode' => 'playCode',
        'qaLibraryList' => 'qaLibraryList',
        'requestId' => 'requestId',
        'selfDirected' => 'selfDirected',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        if (\is_array($this->qaLibraryList)) {
            Model::validateArray($this->qaLibraryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->enableLibrary) {
            $res['enableLibrary'] = $this->enableLibrary;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['metaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['metaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->playCode) {
            $res['playCode'] = $this->playCode;
        }

        if (null !== $this->qaLibraryList) {
            if (\is_array($this->qaLibraryList)) {
                $res['qaLibraryList'] = [];
                $n1 = 0;
                foreach ($this->qaLibraryList as $item1) {
                    $res['qaLibraryList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->selfDirected) {
            $res['selfDirected'] = $this->selfDirected;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['enableLibrary'])) {
            $model->enableLibrary = $map['enableLibrary'];
        }

        if (isset($map['metaData'])) {
            if (!empty($map['metaData'])) {
                $model->metaData = [];
                foreach ($map['metaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['playCode'])) {
            $model->playCode = $map['playCode'];
        }

        if (isset($map['qaLibraryList'])) {
            if (!empty($map['qaLibraryList'])) {
                $model->qaLibraryList = [];
                $n1 = 0;
                foreach ($map['qaLibraryList'] as $item1) {
                    $model->qaLibraryList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['selfDirected'])) {
            $model->selfDirected = $map['selfDirected'];
        }

        return $model;
    }
}
