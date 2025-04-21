<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponseBody\data\cliented;

class data extends Model
{
    /**
     * @var cliented[]
     */
    public $cliented;

    /**
     * @var int
     */
    public $deliveredCount;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $readCount;

    /**
     * @var int
     */
    public $sentCount;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'cliented' => 'Cliented',
        'deliveredCount' => 'DeliveredCount',
        'end' => 'End',
        'language' => 'Language',
        'readCount' => 'ReadCount',
        'sentCount' => 'SentCount',
        'start' => 'Start',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
        if (\is_array($this->cliented)) {
            Model::validateArray($this->cliented);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cliented) {
            if (\is_array($this->cliented)) {
                $res['Cliented'] = [];
                $n1 = 0;
                foreach ($this->cliented as $item1) {
                    $res['Cliented'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cliented'])) {
            if (!empty($map['Cliented'])) {
                $model->cliented = [];
                $n1 = 0;
                foreach ($map['Cliented'] as $item1) {
                    $model->cliented[$n1++] = cliented::fromMap($item1);
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
