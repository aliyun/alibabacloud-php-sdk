<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\TranslateChannelDraftResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\TranslateChannelDraftResponseBody\module\coverImages;

class module extends Model
{
    /**
     * @var string
     */
    public $adaptStatus;

    /**
     * @var string
     */
    public $adaptedContent;

    /**
     * @var string
     */
    public $adaptedTitle;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $channelAccount;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var coverImages[]
     */
    public $coverImages;

    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $externalUrl;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $publishConfig;

    /**
     * @var int
     */
    public $publishedAt;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'adaptStatus' => 'AdaptStatus',
        'adaptedContent' => 'AdaptedContent',
        'adaptedTitle' => 'AdaptedTitle',
        'channel' => 'Channel',
        'channelAccount' => 'ChannelAccount',
        'channelName' => 'ChannelName',
        'channelType' => 'ChannelType',
        'coverImages' => 'CoverImages',
        'draftId' => 'DraftId',
        'externalId' => 'ExternalId',
        'externalUrl' => 'ExternalUrl',
        'failReason' => 'FailReason',
        'publishConfig' => 'PublishConfig',
        'publishedAt' => 'PublishedAt',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->coverImages)) {
            Model::validateArray($this->coverImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptStatus) {
            $res['AdaptStatus'] = $this->adaptStatus;
        }

        if (null !== $this->adaptedContent) {
            $res['AdaptedContent'] = $this->adaptedContent;
        }

        if (null !== $this->adaptedTitle) {
            $res['AdaptedTitle'] = $this->adaptedTitle;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->channelAccount) {
            $res['ChannelAccount'] = $this->channelAccount;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->coverImages) {
            if (\is_array($this->coverImages)) {
                $res['CoverImages'] = [];
                $n1 = 0;
                foreach ($this->coverImages as $item1) {
                    $res['CoverImages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }

        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }

        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->publishConfig) {
            $res['PublishConfig'] = $this->publishConfig;
        }

        if (null !== $this->publishedAt) {
            $res['PublishedAt'] = $this->publishedAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AdaptStatus'])) {
            $model->adaptStatus = $map['AdaptStatus'];
        }

        if (isset($map['AdaptedContent'])) {
            $model->adaptedContent = $map['AdaptedContent'];
        }

        if (isset($map['AdaptedTitle'])) {
            $model->adaptedTitle = $map['AdaptedTitle'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ChannelAccount'])) {
            $model->channelAccount = $map['ChannelAccount'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['CoverImages'])) {
            if (!empty($map['CoverImages'])) {
                $model->coverImages = [];
                $n1 = 0;
                foreach ($map['CoverImages'] as $item1) {
                    $model->coverImages[$n1] = coverImages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }

        if (isset($map['ExternalUrl'])) {
            $model->externalUrl = $map['ExternalUrl'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['PublishConfig'])) {
            $model->publishConfig = $map['PublishConfig'];
        }

        if (isset($map['PublishedAt'])) {
            $model->publishedAt = $map['PublishedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
