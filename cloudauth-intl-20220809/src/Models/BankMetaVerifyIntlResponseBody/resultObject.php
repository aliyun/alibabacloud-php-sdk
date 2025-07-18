<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\BankMetaVerifyIntlResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @description Verification result code.
     * - 1: Consistent (charged)
     * - 2: Inconsistent (charged)
     * - 3: No record found (not charged)
     *
     * @example 1
     *
     * @var string
     */
    public $bizCode;

    /**
     * @description Verification details:
     *
     * - **101**: Verification passed.
     * - **201**: Authentication information does not match, cardholder information is incorrect.
     * - **202**: Authentication information does not match, bank card has not been activated for authenticated payments.
     * - **203**: Authentication information does not match, bank card has expired.
     * - **204**: Authentication information does not match, bank card is a restricted card.
     * - **205**: Authentication information does not match, this card has been confiscated.
     * - **206**: Authentication information does not match, bank card is invalid.
     * - **207**: Authentication information does not match, this card has no corresponding issuing bank.
     * - **208**: Authentication information does not match, this card is uninitialized or dormant.
     * - **209**: Authentication information does not match, this card is a cheating card or swallowed card.
     * - **210**: Authentication information does not match, this card has been reported lost.
     * - **211**: Authentication information does not match, password error limit exceeded.
     * - **212**: Authentication information does not match, issuing bank does not support this transaction.
     * - **213**: Authentication information does not match, card status is abnormal or card is invalid.
     * - **214**: Authentication information does not match, no phone number reserved.
     * - **215**: Authentication information does not match, entered password, expiration date, or CVN2 is incorrect.
     * - **216**: Authentication information does not match, other card anomalies.
     * - **301**: Unable to verify, bank card does not support this service.
     * - **302**: Unable to verify, verification failed or bank refused verification, please contact the issuing bank.
     * - **303**: Unable to verify, bank card does not currently support phone number verification.
     * - **304**: Unable to verify, bank card number is incorrect.
     * - **305**: Unable to verify, other reasons.
     * - **306**: Unable to verify, verification attempt limit exceeded.
     *
     * @example 101
     *
     * @var string
     */
    public $subCode;
    protected $_name = [
        'bizCode' => 'BizCode',
        'subCode' => 'SubCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
