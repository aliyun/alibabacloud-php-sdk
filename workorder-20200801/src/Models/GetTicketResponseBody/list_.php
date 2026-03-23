<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200801\Models\GetTicketResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string[]
     */
    public $attachList;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $fromOfficial;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $noteId;

    /**
     * @var bool
     */
    public $special;
    protected $_name = [
        'attachList' => 'AttachList',
        'content' => 'Content',
        'fromOfficial' => 'FromOfficial',
        'gmtCreated' => 'GmtCreated',
        'noteId' => 'NoteId',
        'special' => 'Special',
    ];

    public function validate()
    {
        if (\is_array($this->attachList)) {
            Model::validateArray($this->attachList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachList) {
            if (\is_array($this->attachList)) {
                $res['AttachList'] = [];
                $n1 = 0;
                foreach ($this->attachList as $item1) {
                    $res['AttachList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fromOfficial) {
            $res['FromOfficial'] = $this->fromOfficial;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        if (null !== $this->special) {
            $res['Special'] = $this->special;
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
        if (isset($map['AttachList'])) {
            if (!empty($map['AttachList'])) {
                $model->attachList = [];
                $n1 = 0;
                foreach ($map['AttachList'] as $item1) {
                    $model->attachList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FromOfficial'])) {
            $model->fromOfficial = $map['FromOfficial'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['Special'])) {
            $model->special = $map['Special'];
        }

        return $model;
    }
}
