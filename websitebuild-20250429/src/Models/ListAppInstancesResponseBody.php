<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ListAppInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var bool
     */
    public $allowRetry;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var AppInstanceAggregate[]
     */
    public $data;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var mixed[]
     */
    public $errorArgs;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bool
     */
    public $nextPage;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resultLimit;

    /**
     * @var string
     */
    public $rootErrorCode;

    /**
     * @var string
     */
    public $rootErrorMsg;

    /**
     * @var bool
     */
    public $synchro;

    /**
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'allowRetry' => 'AllowRetry',
        'appName' => 'AppName',
        'currentPageNum' => 'CurrentPageNum',
        'data' => 'Data',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorArgs' => 'ErrorArgs',
        'maxResults' => 'MaxResults',
        'nextPage' => 'NextPage',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'prePage' => 'PrePage',
        'requestId' => 'RequestId',
        'resultLimit' => 'ResultLimit',
        'rootErrorCode' => 'RootErrorCode',
        'rootErrorMsg' => 'RootErrorMsg',
        'synchro' => 'Synchro',
        'totalPageNum' => 'TotalPageNum',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->errorArgs)) {
            Model::validateArray($this->errorArgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->allowRetry) {
            $res['AllowRetry'] = $this->allowRetry;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->errorArgs) {
            if (\is_array($this->errorArgs)) {
                $res['ErrorArgs'] = [];
                $n1 = 0;
                foreach ($this->errorArgs as $item1) {
                    $res['ErrorArgs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultLimit) {
            $res['ResultLimit'] = $this->resultLimit;
        }

        if (null !== $this->rootErrorCode) {
            $res['RootErrorCode'] = $this->rootErrorCode;
        }

        if (null !== $this->rootErrorMsg) {
            $res['RootErrorMsg'] = $this->rootErrorMsg;
        }

        if (null !== $this->synchro) {
            $res['Synchro'] = $this->synchro;
        }

        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['AllowRetry'])) {
            $model->allowRetry = $map['AllowRetry'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = AppInstanceAggregate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['ErrorArgs'])) {
            if (!empty($map['ErrorArgs'])) {
                $model->errorArgs = [];
                $n1 = 0;
                foreach ($map['ErrorArgs'] as $item1) {
                    $model->errorArgs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultLimit'])) {
            $model->resultLimit = $map['ResultLimit'];
        }

        if (isset($map['RootErrorCode'])) {
            $model->rootErrorCode = $map['RootErrorCode'];
        }

        if (isset($map['RootErrorMsg'])) {
            $model->rootErrorMsg = $map['RootErrorMsg'];
        }

        if (isset($map['Synchro'])) {
            $model->synchro = $map['Synchro'];
        }

        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
