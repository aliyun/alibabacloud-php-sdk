<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask;

use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @var string
     */
    public $honorific;

    /**
     * @example 63860deb-6218-45df-b1e0-76f2b166e790
     *
     * @var string
     */
    public $id;

    /**
     * @example cc231a1d-3c05-4739-8926-193ecf4097ba
     *
     * @var string
     */
    public $jobUuid;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1882020****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 134123****
     *
     * @var string
     */
    public $preferredPhoneNumber;

    /**
     * @example C01
     *
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $role;

    /**
     * @example 151
     *
     * @var int
     */
    public $round;

    /**
     * @example Available
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'honorific' => 'Honorific',
        'id' => 'Id',
        'jobUuid' => 'JobUuid',
        'name' => 'Name',
        'phoneNumber' => 'PhoneNumber',
        'preferredPhoneNumber' => 'PreferredPhoneNumber',
        'referenceId' => 'ReferenceId',
        'role' => 'Role',
        'round' => 'Round',
        'state' => 'State',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->honorific) {
            $res['Honorific'] = $this->honorific;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobUuid) {
            $res['JobUuid'] = $this->jobUuid;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->preferredPhoneNumber) {
            $res['PreferredPhoneNumber'] = $this->preferredPhoneNumber;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Honorific'])) {
            $model->honorific = $map['Honorific'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobUuid'])) {
            $model->jobUuid = $map['JobUuid'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PreferredPhoneNumber'])) {
            $model->preferredPhoneNumber = $map['PreferredPhoneNumber'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
