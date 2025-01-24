<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @var string
     */
    public $commandType;
    /**
     * @var string
     */
    public $contentEncoding;
    /**
     * @var string
     */
    public $desktopId;
    /**
     * @var string[]
     */
    public $desktopIds;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var bool
     */
    public $includeInvokeDesktops;
    /**
     * @var bool
     */
    public $includeOutput;
    /**
     * @var string
     */
    public $invokeId;
    /**
     * @var string
     */
    public $invokeStatus;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commandType'           => 'CommandType',
        'contentEncoding'       => 'ContentEncoding',
        'desktopId'             => 'DesktopId',
        'desktopIds'            => 'DesktopIds',
        'endUserId'             => 'EndUserId',
        'includeInvokeDesktops' => 'IncludeInvokeDesktops',
        'includeOutput'         => 'IncludeOutput',
        'invokeId'              => 'InvokeId',
        'invokeStatus'          => 'InvokeStatus',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }

        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1                = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->includeInvokeDesktops) {
            $res['IncludeInvokeDesktops'] = $this->includeInvokeDesktops;
        }

        if (null !== $this->includeOutput) {
            $res['IncludeOutput'] = $this->includeOutput;
        }

        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }

        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1                = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['IncludeInvokeDesktops'])) {
            $model->includeInvokeDesktops = $map['IncludeInvokeDesktops'];
        }

        if (isset($map['IncludeOutput'])) {
            $model->includeOutput = $map['IncludeOutput'];
        }

        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
