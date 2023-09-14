<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponseBody\data\cliented;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var cliented[]
     */
    public $cliented;

    /**
     * @example 6
     *
     * @var int
     */
    public $deliveredCount;

    /**
     * @example 1668138331485
     *
     * @var int
     */
    public $end;

    /**
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @example 3
     *
     * @var int
     */
    public $readCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $sentCount;

    /**
     * @example 1673919240001
     *
     * @var int
     */
    public $start;

    /**
     * @example 83837774838*****
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'cliented'       => 'Cliented',
        'deliveredCount' => 'DeliveredCount',
        'end'            => 'End',
        'language'       => 'Language',
        'readCount'      => 'ReadCount',
        'sentCount'      => 'SentCount',
        'start'          => 'Start',
        'templateCode'   => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cliented) {
            $res['Cliented'] = [];
            if (null !== $this->cliented && \is_array($this->cliented)) {
                $n = 0;
                foreach ($this->cliented as $item) {
                    $res['Cliented'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deliveredCount) {
            $res['DeliveredCount'] = $this->deliveredCount;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }
        if (null !== $this->sentCount) {
            $res['SentCount'] = $this->sentCount;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cliented'])) {
            if (!empty($map['Cliented'])) {
                $model->cliented = [];
                $n               = 0;
                foreach ($map['Cliented'] as $item) {
                    $model->cliented[$n++] = null !== $item ? cliented::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeliveredCount'])) {
            $model->deliveredCount = $map['DeliveredCount'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }
        if (isset($map['SentCount'])) {
            $model->sentCount = $map['SentCount'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
