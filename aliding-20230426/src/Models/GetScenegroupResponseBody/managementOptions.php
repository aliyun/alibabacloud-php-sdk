<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetScenegroupResponseBody;

use AlibabaCloud\Dara\Model;

class managementOptions extends Model
{
    /**
     * @var string
     */
    public $chatBannedType;

    /**
     * @var string
     */
    public $managementType;

    /**
     * @var string
     */
    public $mentionAllAuthority;

    /**
     * @var string
     */
    public $searchable;

    /**
     * @var string
     */
    public $showHistoryType;

    /**
     * @var string
     */
    public $validationType;
    protected $_name = [
        'chatBannedType' => 'ChatBannedType',
        'managementType' => 'ManagementType',
        'mentionAllAuthority' => 'MentionAllAuthority',
        'searchable' => 'Searchable',
        'showHistoryType' => 'ShowHistoryType',
        'validationType' => 'ValidationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatBannedType) {
            $res['ChatBannedType'] = $this->chatBannedType;
        }

        if (null !== $this->managementType) {
            $res['ManagementType'] = $this->managementType;
        }

        if (null !== $this->mentionAllAuthority) {
            $res['MentionAllAuthority'] = $this->mentionAllAuthority;
        }

        if (null !== $this->searchable) {
            $res['Searchable'] = $this->searchable;
        }

        if (null !== $this->showHistoryType) {
            $res['ShowHistoryType'] = $this->showHistoryType;
        }

        if (null !== $this->validationType) {
            $res['ValidationType'] = $this->validationType;
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
        if (isset($map['ChatBannedType'])) {
            $model->chatBannedType = $map['ChatBannedType'];
        }

        if (isset($map['ManagementType'])) {
            $model->managementType = $map['ManagementType'];
        }

        if (isset($map['MentionAllAuthority'])) {
            $model->mentionAllAuthority = $map['MentionAllAuthority'];
        }

        if (isset($map['Searchable'])) {
            $model->searchable = $map['Searchable'];
        }

        if (isset($map['ShowHistoryType'])) {
            $model->showHistoryType = $map['ShowHistoryType'];
        }

        if (isset($map['ValidationType'])) {
            $model->validationType = $map['ValidationType'];
        }

        return $model;
    }
}
