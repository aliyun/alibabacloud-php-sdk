<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest\signFileList;
use AlibabaCloud\Tea\Model;

class AddSmsSignRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The description of the signature application. The description cannot exceed 200 characters in length. The description is one of the reference information for signature review. We recommend that you describe the use scenarios of your services in detail, and provide information that can verify the services, such as a website URL, a domain name with an ICP filing, an app download URL, an official account name, or a mini program name. For sign-in scenarios, you must also provide an account and password for tests. A detailed description can improve the review efficiency of signatures and templates.
     *
     * This parameter is required.
     * @example This is the abbreviation of our company.
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The signature files.
     *
     * This parameter is required.
     * @var signFileList[]
     */
    public $signFileList;

    /**
     * @description The name of the signature.
     *
     * >
     *
     *   The signature name is not case-sensitive. For example, [Alibaba Cloud Communication] and [alibaba cloud communication] are considered as the same name.
     *
     *   If your verification code signature and general-purpose signature have the same name, the system uses the general-purpose signature to send messages by default.
     *
     * This parameter is required.
     * @example Aliyun
     *
     * @var string
     */
    public $signName;

    /**
     * @description The source of the signature. Valid values:
     *
     *   **0**: the full name or abbreviation of an enterprise or institution
     *   **1**: the full name or abbreviation of a website that has obtained an ICP filing from the Ministry of Industry and Information Technology (MIIT) of China
     *   **2**: the full name or abbreviation of an app
     *   **3**: the full name or abbreviation of an official account or mini-program
     *   **4**: the full name or abbreviation of an e-commerce store
     *   **5**: the full name or abbreviation of a trademark
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $signSource;

    /**
     * @description The type of the signature. Valid values:
     *
     *   **0**: verification code
     *   **1**: general-purpose
     *
     * @example 1
     *
     * @var int
     */
    public $signType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signFileList'         => 'SignFileList',
        'signName'             => 'SignName',
        'signSource'           => 'SignSource',
        'signType'             => 'SignType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->signFileList) {
            $res['SignFileList'] = [];
            if (null !== $this->signFileList && \is_array($this->signFileList)) {
                $n = 0;
                foreach ($this->signFileList as $item) {
                    $res['SignFileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signSource) {
            $res['SignSource'] = $this->signSource;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SignFileList'])) {
            if (!empty($map['SignFileList'])) {
                $model->signFileList = [];
                $n                   = 0;
                foreach ($map['SignFileList'] as $item) {
                    $model->signFileList[$n++] = null !== $item ? signFileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }
        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        return $model;
    }
}
