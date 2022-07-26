<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var int
     */
    public $addNum;

    /**
     * @var string
     */
    public $havanaId;

    /**
     * @var int
     */
    public $removeNum;

    /**
     * @var int
     */
    public $selectedExternalUserNum;

    /**
     * @var int
     */
    public $selectedUserNum;

    /**
     * @var string
     */
    public $suiteKey;

    /**
     * @var int
     */
    public $tokenGrantType;

    /**
     * @var int
     */
    public $version;

    /**
     * @var bool
     */
    public $withoutAuthority;
    protected $_name = [
        'account'                 => 'account',
        'addNum'                  => 'add_num',
        'havanaId'                => 'havana_id',
        'removeNum'               => 'remove_num',
        'selectedExternalUserNum' => 'selected_external_user_num',
        'selectedUserNum'         => 'selected_user_num',
        'suiteKey'                => 'suite_key',
        'tokenGrantType'          => 'token_grant_type',
        'version'                 => 'version',
        'withoutAuthority'        => 'without_authority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }
        if (null !== $this->addNum) {
            $res['add_num'] = $this->addNum;
        }
        if (null !== $this->havanaId) {
            $res['havana_id'] = $this->havanaId;
        }
        if (null !== $this->removeNum) {
            $res['remove_num'] = $this->removeNum;
        }
        if (null !== $this->selectedExternalUserNum) {
            $res['selected_external_user_num'] = $this->selectedExternalUserNum;
        }
        if (null !== $this->selectedUserNum) {
            $res['selected_user_num'] = $this->selectedUserNum;
        }
        if (null !== $this->suiteKey) {
            $res['suite_key'] = $this->suiteKey;
        }
        if (null !== $this->tokenGrantType) {
            $res['token_grant_type'] = $this->tokenGrantType;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->withoutAuthority) {
            $res['without_authority'] = $this->withoutAuthority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['account'])) {
            $model->account = $map['account'];
        }
        if (isset($map['add_num'])) {
            $model->addNum = $map['add_num'];
        }
        if (isset($map['havana_id'])) {
            $model->havanaId = $map['havana_id'];
        }
        if (isset($map['remove_num'])) {
            $model->removeNum = $map['remove_num'];
        }
        if (isset($map['selected_external_user_num'])) {
            $model->selectedExternalUserNum = $map['selected_external_user_num'];
        }
        if (isset($map['selected_user_num'])) {
            $model->selectedUserNum = $map['selected_user_num'];
        }
        if (isset($map['suite_key'])) {
            $model->suiteKey = $map['suite_key'];
        }
        if (isset($map['token_grant_type'])) {
            $model->tokenGrantType = $map['token_grant_type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['without_authority'])) {
            $model->withoutAuthority = $map['without_authority'];
        }

        return $model;
    }
}
