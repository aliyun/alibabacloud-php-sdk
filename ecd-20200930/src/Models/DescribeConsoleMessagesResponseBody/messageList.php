<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList\contentConfigs;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList\hyperLinkConfigs;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList\imageInfoList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList\metaData;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList\titleConfigs;

class messageList extends Model
{
    /**
     * @var string[]
     */
    public $clientTypes;

    /**
     * @var contentConfigs[]
     */
    public $contentConfigs;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var hyperLinkConfigs[]
     */
    public $hyperLinkConfigs;

    /**
     * @var string
     */
    public $imageFilePath;

    /**
     * @var imageInfoList[]
     */
    public $imageInfoList;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $messageLevel;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var metaData
     */
    public $metaData;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetIds;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var titleConfigs[]
     */
    public $titleConfigs;
    protected $_name = [
        'clientTypes' => 'ClientTypes',
        'contentConfigs' => 'ContentConfigs',
        'endTime' => 'EndTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hyperLinkConfigs' => 'HyperLinkConfigs',
        'imageFilePath' => 'ImageFilePath',
        'imageInfoList' => 'ImageInfoList',
        'imageUrl' => 'ImageUrl',
        'messageId' => 'MessageId',
        'messageLevel' => 'MessageLevel',
        'messageType' => 'MessageType',
        'metaData' => 'MetaData',
        'position' => 'Position',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'targetIds' => 'TargetIds',
        'targetType' => 'TargetType',
        'titleConfigs' => 'TitleConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->clientTypes)) {
            Model::validateArray($this->clientTypes);
        }
        if (\is_array($this->contentConfigs)) {
            Model::validateArray($this->contentConfigs);
        }
        if (\is_array($this->hyperLinkConfigs)) {
            Model::validateArray($this->hyperLinkConfigs);
        }
        if (\is_array($this->imageInfoList)) {
            Model::validateArray($this->imageInfoList);
        }
        if (null !== $this->metaData) {
            $this->metaData->validate();
        }
        if (\is_array($this->titleConfigs)) {
            Model::validateArray($this->titleConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientTypes) {
            if (\is_array($this->clientTypes)) {
                $res['ClientTypes'] = [];
                $n1 = 0;
                foreach ($this->clientTypes as $item1) {
                    $res['ClientTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contentConfigs) {
            if (\is_array($this->contentConfigs)) {
                $res['ContentConfigs'] = [];
                $n1 = 0;
                foreach ($this->contentConfigs as $item1) {
                    $res['ContentConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hyperLinkConfigs) {
            if (\is_array($this->hyperLinkConfigs)) {
                $res['HyperLinkConfigs'] = [];
                $n1 = 0;
                foreach ($this->hyperLinkConfigs as $item1) {
                    $res['HyperLinkConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageFilePath) {
            $res['ImageFilePath'] = $this->imageFilePath;
        }

        if (null !== $this->imageInfoList) {
            if (\is_array($this->imageInfoList)) {
                $res['ImageInfoList'] = [];
                $n1 = 0;
                foreach ($this->imageInfoList as $item1) {
                    $res['ImageInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->messageLevel) {
            $res['MessageLevel'] = $this->messageLevel;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->metaData) {
            $res['MetaData'] = null !== $this->metaData ? $this->metaData->toArray($noStream) : $this->metaData;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->titleConfigs) {
            if (\is_array($this->titleConfigs)) {
                $res['TitleConfigs'] = [];
                $n1 = 0;
                foreach ($this->titleConfigs as $item1) {
                    $res['TitleConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n1 = 0;
                foreach ($map['ClientTypes'] as $item1) {
                    $model->clientTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContentConfigs'])) {
            if (!empty($map['ContentConfigs'])) {
                $model->contentConfigs = [];
                $n1 = 0;
                foreach ($map['ContentConfigs'] as $item1) {
                    $model->contentConfigs[$n1] = contentConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HyperLinkConfigs'])) {
            if (!empty($map['HyperLinkConfigs'])) {
                $model->hyperLinkConfigs = [];
                $n1 = 0;
                foreach ($map['HyperLinkConfigs'] as $item1) {
                    $model->hyperLinkConfigs[$n1] = hyperLinkConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageFilePath'])) {
            $model->imageFilePath = $map['ImageFilePath'];
        }

        if (isset($map['ImageInfoList'])) {
            if (!empty($map['ImageInfoList'])) {
                $model->imageInfoList = [];
                $n1 = 0;
                foreach ($map['ImageInfoList'] as $item1) {
                    $model->imageInfoList[$n1] = imageInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['MessageLevel'])) {
            $model->messageLevel = $map['MessageLevel'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['MetaData'])) {
            $model->metaData = metaData::fromMap($map['MetaData']);
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetIds'])) {
            $model->targetIds = $map['TargetIds'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TitleConfigs'])) {
            if (!empty($map['TitleConfigs'])) {
                $model->titleConfigs = [];
                $n1 = 0;
                foreach ($map['TitleConfigs'] as $item1) {
                    $model->titleConfigs[$n1] = titleConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
