<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponseBody\result\authorizedUserList;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $authorizationType;

    /**
     * @var authorizedUserList[]
     */
    public $authorizedUserList;

    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var string
     */
    public $QRCodeType;
    protected $_name = [
        'antChainId'         => 'AntChainId',
        'authorizationType'  => 'AuthorizationType',
        'authorizedUserList' => 'AuthorizedUserList',
        'pagination'         => 'Pagination',
        'QRCodeType'         => 'QRCodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }
        if (null !== $this->authorizedUserList) {
            $res['AuthorizedUserList'] = [];
            if (null !== $this->authorizedUserList && \is_array($this->authorizedUserList)) {
                $n = 0;
                foreach ($this->authorizedUserList as $item) {
                    $res['AuthorizedUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->QRCodeType) {
            $res['QRCodeType'] = $this->QRCodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['AuthorizedUserList'])) {
            if (!empty($map['AuthorizedUserList'])) {
                $model->authorizedUserList = [];
                $n                         = 0;
                foreach ($map['AuthorizedUserList'] as $item) {
                    $model->authorizedUserList[$n++] = null !== $item ? authorizedUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['QRCodeType'])) {
            $model->QRCodeType = $map['QRCodeType'];
        }

        return $model;
    }
}
