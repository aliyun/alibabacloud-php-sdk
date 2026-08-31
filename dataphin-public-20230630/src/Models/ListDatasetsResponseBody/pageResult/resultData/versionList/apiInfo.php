<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData\versionList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData\versionList\apiInfo\requestParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData\versionList\apiInfo\responseParamList;

class apiInfo extends Model
{
    /**
     * @var int
     */
    public $apiNo;

    /**
     * @var int
     */
    public $execTimeout;

    /**
     * @var int
     */
    public $executeMode;

    /**
     * @var int
     */
    public $osApiGroup;

    /**
     * @var string
     */
    public $osApiGroupName;

    /**
     * @var int
     */
    public $osProject;

    /**
     * @var string
     */
    public $osProjectName;

    /**
     * @var int
     */
    public $protocol;

    /**
     * @var int
     */
    public $requestMethod;

    /**
     * @var requestParamList[]
     */
    public $requestParamList;

    /**
     * @var responseParamList[]
     */
    public $responseParamList;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'apiNo' => 'ApiNo',
        'execTimeout' => 'ExecTimeout',
        'executeMode' => 'ExecuteMode',
        'osApiGroup' => 'OsApiGroup',
        'osApiGroupName' => 'OsApiGroupName',
        'osProject' => 'OsProject',
        'osProjectName' => 'OsProjectName',
        'protocol' => 'Protocol',
        'requestMethod' => 'RequestMethod',
        'requestParamList' => 'RequestParamList',
        'responseParamList' => 'ResponseParamList',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->requestParamList)) {
            Model::validateArray($this->requestParamList);
        }
        if (\is_array($this->responseParamList)) {
            Model::validateArray($this->responseParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiNo) {
            $res['ApiNo'] = $this->apiNo;
        }

        if (null !== $this->execTimeout) {
            $res['ExecTimeout'] = $this->execTimeout;
        }

        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }

        if (null !== $this->osApiGroup) {
            $res['OsApiGroup'] = $this->osApiGroup;
        }

        if (null !== $this->osApiGroupName) {
            $res['OsApiGroupName'] = $this->osApiGroupName;
        }

        if (null !== $this->osProject) {
            $res['OsProject'] = $this->osProject;
        }

        if (null !== $this->osProjectName) {
            $res['OsProjectName'] = $this->osProjectName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }

        if (null !== $this->requestParamList) {
            if (\is_array($this->requestParamList)) {
                $res['RequestParamList'] = [];
                $n1 = 0;
                foreach ($this->requestParamList as $item1) {
                    $res['RequestParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseParamList) {
            if (\is_array($this->responseParamList)) {
                $res['ResponseParamList'] = [];
                $n1 = 0;
                foreach ($this->responseParamList as $item1) {
                    $res['ResponseParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ApiNo'])) {
            $model->apiNo = $map['ApiNo'];
        }

        if (isset($map['ExecTimeout'])) {
            $model->execTimeout = $map['ExecTimeout'];
        }

        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }

        if (isset($map['OsApiGroup'])) {
            $model->osApiGroup = $map['OsApiGroup'];
        }

        if (isset($map['OsApiGroupName'])) {
            $model->osApiGroupName = $map['OsApiGroupName'];
        }

        if (isset($map['OsProject'])) {
            $model->osProject = $map['OsProject'];
        }

        if (isset($map['OsProjectName'])) {
            $model->osProjectName = $map['OsProjectName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }

        if (isset($map['RequestParamList'])) {
            if (!empty($map['RequestParamList'])) {
                $model->requestParamList = [];
                $n1 = 0;
                foreach ($map['RequestParamList'] as $item1) {
                    $model->requestParamList[$n1] = requestParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResponseParamList'])) {
            if (!empty($map['ResponseParamList'])) {
                $model->responseParamList = [];
                $n1 = 0;
                foreach ($map['ResponseParamList'] as $item1) {
                    $model->responseParamList[$n1] = responseParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
