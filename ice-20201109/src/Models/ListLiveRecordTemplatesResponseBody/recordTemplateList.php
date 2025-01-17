<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody\recordTemplateList\recordFormatList;

class recordTemplateList extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $lastModified;
    /**
     * @var string
     */
    public $name;
    /**
     * @var recordFormatList[]
     */
    public $recordFormatList;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'lastModified'     => 'LastModified',
        'name'             => 'Name',
        'recordFormatList' => 'RecordFormatList',
        'templateId'       => 'TemplateId',
        'type'             => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->recordFormatList)) {
            Model::validateArray($this->recordFormatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recordFormatList) {
            if (\is_array($this->recordFormatList)) {
                $res['RecordFormatList'] = [];
                $n1                      = 0;
                foreach ($this->recordFormatList as $item1) {
                    $res['RecordFormatList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecordFormatList'])) {
            if (!empty($map['RecordFormatList'])) {
                $model->recordFormatList = [];
                $n1                      = 0;
                foreach ($map['RecordFormatList'] as $item1) {
                    $model->recordFormatList[$n1++] = recordFormatList::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
