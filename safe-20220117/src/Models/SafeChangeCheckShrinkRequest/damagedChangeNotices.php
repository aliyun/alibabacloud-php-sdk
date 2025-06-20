<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\damagedChangeNotices\sensitiveCustomers;

class damagedChangeNotices extends Model
{
    /**
     * @var string
     */
    public $bgCancelNoticeContent;

    /**
     * @var string
     */
    public $bgCancelNoticeEventId;

    /**
     * @var string[]
     */
    public $channel;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var sensitiveCustomers[]
     */
    public $sensitiveCustomers;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bgCancelNoticeContent' => 'BgCancelNoticeContent',
        'bgCancelNoticeEventId' => 'BgCancelNoticeEventId',
        'channel' => 'Channel',
        'content' => 'Content',
        'eventId' => 'EventId',
        'sensitiveCustomers' => 'SensitiveCustomers',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->channel)) {
            Model::validateArray($this->channel);
        }
        if (\is_array($this->sensitiveCustomers)) {
            Model::validateArray($this->sensitiveCustomers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgCancelNoticeContent) {
            $res['BgCancelNoticeContent'] = $this->bgCancelNoticeContent;
        }

        if (null !== $this->bgCancelNoticeEventId) {
            $res['BgCancelNoticeEventId'] = $this->bgCancelNoticeEventId;
        }

        if (null !== $this->channel) {
            if (\is_array($this->channel)) {
                $res['Channel'] = [];
                $n1 = 0;
                foreach ($this->channel as $item1) {
                    $res['Channel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->sensitiveCustomers) {
            if (\is_array($this->sensitiveCustomers)) {
                $res['SensitiveCustomers'] = [];
                $n1 = 0;
                foreach ($this->sensitiveCustomers as $item1) {
                    $res['SensitiveCustomers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BgCancelNoticeContent'])) {
            $model->bgCancelNoticeContent = $map['BgCancelNoticeContent'];
        }

        if (isset($map['BgCancelNoticeEventId'])) {
            $model->bgCancelNoticeEventId = $map['BgCancelNoticeEventId'];
        }

        if (isset($map['Channel'])) {
            if (!empty($map['Channel'])) {
                $model->channel = [];
                $n1 = 0;
                foreach ($map['Channel'] as $item1) {
                    $model->channel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['SensitiveCustomers'])) {
            if (!empty($map['SensitiveCustomers'])) {
                $model->sensitiveCustomers = [];
                $n1 = 0;
                foreach ($map['SensitiveCustomers'] as $item1) {
                    $model->sensitiveCustomers[$n1] = sensitiveCustomers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
