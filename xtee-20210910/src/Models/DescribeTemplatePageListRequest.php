<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeTemplatePageListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateSearchItem;

    /**
     * @var string
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'lang'               => 'Lang',
        'currentPage'        => 'currentPage',
        'eventCodes'         => 'eventCodes',
        'pageSize'           => 'pageSize',
        'regId'              => 'regId',
        'templateName'       => 'templateName',
        'templateSearchItem' => 'templateSearchItem',
        'templateStatus'     => 'templateStatus',
        'templateType'       => 'templateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }
        if (null !== $this->templateSearchItem) {
            $res['templateSearchItem'] = $this->templateSearchItem;
        }
        if (null !== $this->templateStatus) {
            $res['templateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplatePageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }
        if (isset($map['templateSearchItem'])) {
            $model->templateSearchItem = $map['templateSearchItem'];
        }
        if (isset($map['templateStatus'])) {
            $model->templateStatus = $map['templateStatus'];
        }
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }

        return $model;
    }
}
