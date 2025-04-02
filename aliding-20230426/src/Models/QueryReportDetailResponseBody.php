<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailResponseBody\content;

class QueryReportDetailResponseBody extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'content' => 'content',
        'createTime' => 'createTime',
        'creatorId' => 'creatorId',
        'creatorName' => 'creatorName',
        'deptName' => 'deptName',
        'modifiedTime' => 'modifiedTime',
        'remark' => 'remark',
        'reportId' => 'reportId',
        'requestId' => 'requestId',
        'templateName' => 'templateName',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->deptName) {
            $res['deptName'] = $this->deptName;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1++] = content::fromMap($item1);
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['deptName'])) {
            $model->deptName = $map['deptName'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
