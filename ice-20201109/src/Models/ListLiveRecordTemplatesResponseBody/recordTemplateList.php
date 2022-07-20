<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody\recordTemplateList\recordFormatList;
use AlibabaCloud\Tea\Model;

class recordTemplateList extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 最后修改时间
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description 资源名称
     *
     * @var int[]
     */
    public $name;

    /**
     * @description 录制格式
     *
     * @var recordFormatList[]
     */
    public $recordFormatList;

    /**
     * @description 资源一级ID
     *
     * @var int[]
     */
    public $templateId;

    /**
     * @description 资源名称
     *
     * @var int[]
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
    }

    public function toMap()
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
            $res['RecordFormatList'] = [];
            if (null !== $this->recordFormatList && \is_array($this->recordFormatList)) {
                $n = 0;
                foreach ($this->recordFormatList as $item) {
                    $res['RecordFormatList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return recordTemplateList
     */
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
                $n                       = 0;
                foreach ($map['RecordFormatList'] as $item) {
                    $model->recordFormatList[$n++] = null !== $item ? recordFormatList::fromMap($item) : $item;
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
